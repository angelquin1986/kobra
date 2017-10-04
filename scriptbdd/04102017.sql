CREATE TABLE `agenteagenciahistorial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `agente` int(11) NOT NULL,
  `agencia` int(11) NOT NULL,
  `fechaModificacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_agente_agencia_idx` (`agencia`),
  KEY `fk_agente_id` (`agente`),
  CONSTRAINT `fk_agente_agencia` FOREIGN KEY (`agencia`) REFERENCES `agencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_agente_id` FOREIGN KEY (`agente`) REFERENCES `agente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
);
ALTER TABLE `kobratest`.`orden` 
ADD COLUMN `numerodeboletos` INT(11) NULL AFTER `numerodeboletos`,
ADD COLUMN `numerosdeboleto` VARCHAR(500) NULL AFTER `numerosdeboleto`;
