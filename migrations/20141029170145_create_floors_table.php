<?php

use Phinx\Migration\AbstractMigration;

class CreateFloorsTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     *
     * Uncomment this method if you would like to use it.
     *
    public function change()
    {
    }
    */
    
    /**
     * Migrate Up.
     */
    public function up()
    {
    $sql = <<<SQL
CREATE TABLE IF NOT EXISTS `floors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `floor` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `number` (`number`)
  ADD CONSTRAINT `floors_ibfk_2`
  FOREIGN KEY (`fask_id`)
  REFERENCES `task` (`id`);
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;
SQL;
      $this->execute($sql); 

    }

    /**
     * Migrate Down.
     */
    public function down()
    {

    }
}