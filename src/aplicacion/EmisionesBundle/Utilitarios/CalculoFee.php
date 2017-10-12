<?php
namespace aplicacion\EmisionesBundle\Utilitarios;
use Doctrine\ORM\EntityManager;
use Symfony\Component\DependencyInjection\Container;
use Doctrine\ORM\Query\ResultSetMapping;

class CalculoFee {
    protected $emParameter;
    private $container;
    public function __construct(EntityManager $entityManager,Container $container){
        $this->emParameter = $entityManager;
        $this->container = $container;
    }
    public  function calcularFee($procesoEmergencia,$idAerolineaFee,$tipoBoletoParam,$tipoServicio,$origen){
      //validar el tipo boleto
      $tipoBoleto = 'N';
      $this->container->get('logger')->error('tipoServicio',  array('tipoServicio' => strtoupper($tipoServicio)));
      $this->container->get('logger')->error('tipoBoleto',  array('tipoBoleto' => $tipoBoletoParam));
      if($tipoBoletoParam ==='internacional'){
          $tipoBoleto='I';
      }
      //tomar el emergente
      $feeEmergente= 0;
      if($procesoEmergencia ==='1'){
        $feeEmergenteObject = $this->selectAerolineaFee(
                                "tiposervicio='FE' and "
                              . "tipoaerolinea ='".$tipoBoleto."' "
                              . "and esPredeterminada=1 and "
                              . "origen='".$origen."'" );     
        if($feeEmergenteObject){
            $feeEmergente = $feeEmergenteObject['valorfee'];
            $this->container->get('logger')->error('feeEmergenteBase',  array('feeEmergenteBase' => $feeEmergenteObject));
        }
      }
      
      $feeAerolina=0;
      //validar el tipo de servicio
      if(strtoupper($tipoServicio)==='EMISION'){
          $this->container->get('logger')->error('EMISION',  array('EMISION' => 'EMISION'));
          
         //tomar el registro de la aereolina y el tipo boleto 
         $feeAerolinaObject = $this->selectAerolineaFee(
                 "aerolinea=".$idAerolineaFee." and "
               . "tiposervicio='E' and "
               . "tipoaerolinea ='".$tipoBoleto."' "
               . "and esPredeterminada=0 and "
               . "origen='".$origen."'" );
         if($feeAerolinaObject){
              $feeAerolina = $feeAerolinaObject['valorfee'];
              $this->container->get('logger')->error('feeAerolineaExiste',  array('fee' => $feeAerolina,'aerolinea' => $idAerolineaFee));
          }else{
            //si no encuentra la aerolina tomar el fee  para todas las aerolineas
            $feeAerolinaObject = $this->selectAerolineaFee(
                 "tiposervicio='E' and "
               . "tipoaerolinea ='".$tipoBoleto."' "
               . "and esPredeterminada=1 and "
               . "origen='".$origen."'" );
            if($feeAerolinaObject){
                $feeAerolina =  $feeAerolinaObject['valorfee'];
                $this->container->get('logger')->error('feeAerolineaNoExiste',  array('fee' => $feeAerolina));
            }else{
                $feeAerolina=0;
                $this->container->get('logger')->error('feeAerolineaNoExiste',  array('no hay en base' =>'0'));
            }
          }
      }else{
          if(strtoupper($tipoServicio)==='REVISION'){
            $this->container->get('logger')->error('REVISION',  array('REVISION' => 'REVISION'));
          //para la revision solo son el por defaul y por tipo
            $feeAerolinaObject = $this->selectAerolineaFee(
                 "tiposervicio='R' and "
               . "tipoaerolinea ='".$tipoBoleto."' "
               . "and esPredeterminada=1 and "
               . "origen='".$origen."'" );
            if($feeAerolinaObject){
                $feeAerolina =  $feeAerolinaObject['valorfee'];
                $this->container->get('logger')->error('feeDefault',  array('AerolineafeeAerolineafee' =>$feeAerolina));
            }else{
                $feeAerolina=0;
            }
          }else{
               if(strtoupper($tipoServicio)==='ANULACION'){
                    $this->container->get('logger')->error('ANULACION',  array('ANULACION' => 'ANULACION'));
                     $feeAerolinaObject = $this->selectAerolineaFee(
                        "tiposervicio='A' and "
                      . "tipoaerolinea ='".$tipoBoleto."' "
                      . "and esPredeterminada=1 and "
                      . "origen='".$origen."'" );                   
                    if($feeAerolinaObject){
                        $feeAerolina =  $feeAerolinaObject['valorfee'];
                        $this->container->get('logger')->error('feeDefault',  array('feeDefault' =>$feeAerolina));
                    }else{
                        $feeAerolina=0;
                    }
               }
          }
      }
      $this->container->get('logger')->error('feeTotales',  array('fee' =>$feeAerolina,'feeEmergente' =>$feeEmergente));
      return array(
        "fee" => $feeAerolina,
        "feeEmergente" => $feeEmergente,
       );   
  }
  
    public function getResultSet(){
       return new ResultSetMapping(); 
    }
    
    public function selectAerolineaFee($where){
        $conn = $this->container->get('database_connection');
        $sql= 'SELECT '
                .   'id,aerolinea,tipoaerolinea,esPredeterminada,valorfee,tiposervicio,origen '
                .   'FROM aerolineafee '
                .   'where '.$where;
        $fee  = $conn->fetchAll($sql);
        if($fee){
            return $fee[0];
        }else{
            return null;
        }
    }
    
}

