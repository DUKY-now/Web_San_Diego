<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251124152837 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ticket ADD priorite VARCHAR(50) NOT NULL, DROP priorité, CHANGE statut statut VARCHAR(50) NOT NULL, CHANGE updated_at updated_at DATETIME DEFAULT NULL, CHANGE contenue contenu LONGTEXT NOT NULL, CHANGE crééa created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ticket ADD priorité VARCHAR(255) NOT NULL, DROP priorite, CHANGE statut statut VARCHAR(255) NOT NULL, CHANGE updated_at updated_at DATETIME NOT NULL, CHANGE contenu contenue LONGTEXT NOT NULL, CHANGE created_at crééa DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
    }
}
