<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251124081411 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE role_administratif (id INT AUTO_INCREMENT NOT NULL, role VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE staffs ADD poste_admin_id INT DEFAULT NULL, ADD role VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE staffs ADD CONSTRAINT FK_54D53909454AB76 FOREIGN KEY (poste_admin_id) REFERENCES poste_admin (id)');
        $this->addSql('CREATE INDEX IDX_54D53909454AB76 ON staffs (poste_admin_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE staffs DROP FOREIGN KEY FK_54D53904EF86421');
        $this->addSql('DROP TABLE role_administratif');
        $this->addSql('ALTER TABLE staffs DROP FOREIGN KEY FK_54D53909454AB76');
        $this->addSql('DROP INDEX IDX_54D53909454AB76 ON staffs');
        $this->addSql('ALTER TABLE staffs DROP poste_admin_id, DROP role');
    }
}
