<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251121134339 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE role_administratif (id INT AUTO_INCREMENT NOT NULL, role VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE staffs ADD role_admin_id INT NOT NULL');
        $this->addSql('ALTER TABLE staffs ADD CONSTRAINT FK_54D53904EF86421 FOREIGN KEY (role_admin_id) REFERENCES role_administratif (id)');
        $this->addSql('CREATE INDEX IDX_54D53904EF86421 ON staffs (role_admin_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE staffs DROP FOREIGN KEY FK_54D53904EF86421');
        $this->addSql('DROP TABLE role_administratif');
        $this->addSql('DROP INDEX IDX_54D53904EF86421 ON staffs');
        $this->addSql('ALTER TABLE staffs DROP role_admin_id');
    }
}
