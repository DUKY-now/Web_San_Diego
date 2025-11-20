<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251120125612 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE factions ADD slug VARCHAR(255) NOT NULL, CHANGE lore lore VARCHAR(255) NOT NULL, CHANGE membres membres INT NOT NULL');
        $this->addSql('ALTER TABLE members ADD appartenance_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE members ADD CONSTRAINT FK_45A0D2FF1156F50D FOREIGN KEY (appartenance_id) REFERENCES factions (id)');
        $this->addSql('CREATE INDEX IDX_45A0D2FF1156F50D ON members (appartenance_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE factions DROP slug, CHANGE lore lore TEXT NOT NULL, CHANGE membres membres INT DEFAULT NULL');
        $this->addSql('ALTER TABLE members DROP FOREIGN KEY FK_45A0D2FF1156F50D');
        $this->addSql('DROP INDEX IDX_45A0D2FF1156F50D ON members');
        $this->addSql('ALTER TABLE members DROP appartenance_id');
    }
}
