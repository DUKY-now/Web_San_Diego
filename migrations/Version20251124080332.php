<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251124080332 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE factions (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, lore VARCHAR(255) NOT NULL, membres INT NOT NULL, slug VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE members (id INT AUTO_INCREMENT NOT NULL, appartenance_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, fonction VARCHAR(255) NOT NULL, photo VARCHAR(255) DEFAULT NULL, INDEX IDX_45A0D2FF1156F50D (appartenance_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE poste_admin (id INT AUTO_INCREMENT NOT NULL, poste VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE projectsandiego (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE role_administratif (id INT AUTO_INCREMENT NOT NULL, role VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE staffs (id INT AUTO_INCREMENT NOT NULL, role_admin_id INT NOT NULL, pseudo VARCHAR(255) NOT NULL, role VARCHAR(255) NOT NULL, photo VARCHAR(255) NOT NULL, INDEX IDX_54D53904EF86421 (role_admin_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE members ADD CONSTRAINT FK_45A0D2FF1156F50D FOREIGN KEY (appartenance_id) REFERENCES factions (id)');
        $this->addSql('ALTER TABLE staffs ADD CONSTRAINT FK_54D53904EF86421 FOREIGN KEY (role_admin_id) REFERENCES role_administratif (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE members DROP FOREIGN KEY FK_45A0D2FF1156F50D');
        $this->addSql('ALTER TABLE staffs DROP FOREIGN KEY FK_54D53904EF86421');
        $this->addSql('DROP TABLE factions');
        $this->addSql('DROP TABLE members');
        $this->addSql('DROP TABLE poste_admin');
        $this->addSql('DROP TABLE projectsandiego');
        $this->addSql('DROP TABLE role_administratif');
        $this->addSql('DROP TABLE staffs');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
