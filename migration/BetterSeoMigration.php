<?php

namespace OxidEsales\EshopCommunity\MigrationsProject;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Pls generate a migration: vendor/bin/oe-eshop-db_migrate migrations:generate PR
 * and copy up & down methods to the created migration
 * Then run migrations: vendor/bin/oe-eshop-db_migrate migrations:migrate
 */
class BetterSeoMigration extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        $this->addSql("ALTER TABLE `oxarticles`
        	ADD `IVOBA_SEOTITLE` VARCHAR( 255 ) NOT NULL DEFAULT '';");
        $this->addSql("ALTER TABLE `oxarticles`
        	ADD `IVOBA_SEOTITLE_1` VARCHAR( 255 ) NOT NULL DEFAULT '';");
        $this->addSql("ALTER TABLE `oxarticles`
        	ADD `IVOBA_SEOTITLE_2` VARCHAR( 255 ) NOT NULL DEFAULT '';");
        $this->addSql("ALTER TABLE `oxarticles`
        	ADD `IVOBA_SEOTITLE_3` VARCHAR( 255 ) NOT NULL DEFAULT '';");

        $this->addSql("ALTER TABLE `oxcategories`
        	ADD `IVOBA_SEOTITLE` VARCHAR( 255 ) NOT NULL DEFAULT '';");
        $this->addSql("ALTER TABLE `oxcategories`
        	ADD `IVOBA_SEOTITLE_1` VARCHAR( 255 ) NOT NULL DEFAULT '';");
        $this->addSql("ALTER TABLE `oxcategories`
        	ADD `IVOBA_SEOTITLE_2` VARCHAR( 255 ) NOT NULL DEFAULT '';");
        $this->addSql("ALTER TABLE `oxcategories`
        	ADD `IVOBA_SEOTITLE_3` VARCHAR( 255 ) NOT NULL DEFAULT '';");

        $this->addSql("ALTER TABLE `oxcontents`
        	ADD `IVOBA_SEOTITLE` VARCHAR( 255 ) NOT NULL DEFAULT '';");
        $this->addSql("ALTER TABLE `oxcontents`
        	ADD `IVOBA_SEOTITLE_1` VARCHAR( 255 ) NOT NULL DEFAULT '';");
        $this->addSql("ALTER TABLE `oxcontents`
        	ADD `IVOBA_SEOTITLE_2` VARCHAR( 255 ) NOT NULL DEFAULT '';");
        $this->addSql("ALTER TABLE `oxcontents`
        	ADD `IVOBA_SEOTITLE_3` VARCHAR( 255 ) NOT NULL DEFAULT '';");

        $this->addSql("ALTER TABLE `oxmanufacturers`
        	ADD `IVOBA_SEOTITLE` VARCHAR( 255 ) NOT NULL DEFAULT '';");
        $this->addSql("ALTER TABLE `oxmanufacturers`
        	ADD `IVOBA_SEOTITLE_1` VARCHAR( 255 ) NOT NULL DEFAULT '';");
        $this->addSql("ALTER TABLE `oxmanufacturers`
        	ADD `IVOBA_SEOTITLE_2` VARCHAR( 255 ) NOT NULL DEFAULT '';");
        $this->addSql("ALTER TABLE `oxmanufacturers`
        	ADD `IVOBA_SEOTITLE_3` VARCHAR( 255 ) NOT NULL DEFAULT '';");
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
      $this->addSql("ALTER TABLE `oxarticles`
        DROP `IVOBA_SEOTITLE`;");
      $this->addSql("ALTER TABLE `oxarticles`
        DROP `IVOBA_SEOTITLE_1`);
      $this->addSql("ALTER TABLE `oxarticles`
        DROP `IVOBA_SEOTITLE_2`);
      $this->addSql("ALTER TABLE `oxarticles`
        DROP `IVOBA_SEOTITLE_3`);

      $this->addSql("ALTER TABLE `oxcategories`
        DROP `IVOBA_SEOTITLE`);
      $this->addSql("ALTER TABLE `oxcategories`
        DROP `IVOBA_SEOTITLE_1`);
      $this->addSql("ALTER TABLE `oxcategories`
        DROP `IVOBA_SEOTITLE_2`);
      $this->addSql("ALTER TABLE `oxcategories`
        DROP `IVOBA_SEOTITLE_3`);

      $this->addSql("ALTER TABLE `oxcontents`
        DROP `IVOBA_SEOTITLE`);
      $this->addSql("ALTER TABLE `oxcontents`
        DROP `IVOBA_SEOTITLE_1`);
      $this->addSql("ALTER TABLE `oxcontents`
        DROP `IVOBA_SEOTITLE_2`);
      $this->addSql("ALTER TABLE `oxcontents`
        DROP `IVOBA_SEOTITLE_3`);

      $this->addSql("ALTER TABLE `oxmanufacturers`
        DROP `IVOBA_SEOTITLE`);
      $this->addSql("ALTER TABLE `oxmanufacturers`
        DROP `IVOBA_SEOTITLE_1`);
      $this->addSql("ALTER TABLE `oxmanufacturers`
        DROP `IVOBA_SEOTITLE_2`);
      $this->addSql("ALTER TABLE `oxmanufacturers`
        DROP `IVOBA_SEOTITLE_3`);
    }
}
