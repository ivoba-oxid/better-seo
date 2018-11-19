<?php
/* Please retain this copyright header in all versions of the software
 *
 * Copyright (C) 2018 Ivo Bathke
 *
 * It is published under the MIT Open Source License.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of
 * this software and associated documentation files (the "Software"), to deal in
 * the Software without restriction, including without limitation the rights to
 * use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of
 * the Software, and to permit persons to whom the Software is furnished to do so,
 * subject to the following conditions:
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
 * FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 * COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
 * IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
 * CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*/

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
      DROP `IVOBA_SEOTITLE_1`;");
        $this->addSql("ALTER TABLE `oxarticles`
      DROP `IVOBA_SEOTITLE_2`;");
        $this->addSql("ALTER TABLE `oxarticles`
      DROP `IVOBA_SEOTITLE_3`;");

        $this->addSql("ALTER TABLE `oxcategories`
      DROP `IVOBA_SEOTITLE`;");
        $this->addSql("ALTER TABLE `oxcategories`
      DROP `IVOBA_SEOTITLE_1`;");
        $this->addSql("ALTER TABLE `oxcategories`
      DROP `IVOBA_SEOTITLE_2`;");
        $this->addSql("ALTER TABLE `oxcategories`
      DROP `IVOBA_SEOTITLE_3`;");

        $this->addSql("ALTER TABLE `oxcontents`
      DROP `IVOBA_SEOTITLE`;");
        $this->addSql("ALTER TABLE `oxcontents`
      DROP `IVOBA_SEOTITLE_1`;");
        $this->addSql("ALTER TABLE `oxcontents`
      DROP `IVOBA_SEOTITLE_2`;");
        $this->addSql("ALTER TABLE `oxcontents`
      DROP `IVOBA_SEOTITLE_3`;");

        $this->addSql("ALTER TABLE `oxmanufacturers`
      DROP `IVOBA_SEOTITLE`;");
        $this->addSql("ALTER TABLE `oxmanufacturers`
      DROP `IVOBA_SEOTITLE_1`;");
        $this->addSql("ALTER TABLE `oxmanufacturers`
      DROP `IVOBA_SEOTITLE_2`;");
        $this->addSql("ALTER TABLE `oxmanufacturers`
      DROP `IVOBA_SEOTITLE_3`;");
    }
}
