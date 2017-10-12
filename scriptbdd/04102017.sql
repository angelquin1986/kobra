
CREATE TABLE `agenteagenciahistorial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `agente` int(11) NOT NULL,
  `agencia` int(11) NOT NULL,
  `fechaModificacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_agente_agencia_idx` (`agencia`),
  KEY `fk_agente_id` (`agente`),
  CONSTRAINT `fk_agente_agencia` FOREIGN KEY (`agencia`) REFERENCES `Agencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_agente_id` FOREIGN KEY (`agente`) REFERENCES `Agente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
)ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

ALTER TABLE `Orden` 
ADD COLUMN `numerodeboletos` INT(11) NULL ,
ADD COLUMN `numerosdeboleto` VARCHAR(500) NULL;
