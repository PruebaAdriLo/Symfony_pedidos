<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240226130649 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE productos DROP FOREIGN KEY FK_767490E65792B277');
        $this->addSql('DROP INDEX IDX_767490E65792B277 ON productos');
        $this->addSql('ALTER TABLE productos ADD nombre VARCHAR(50) NOT NULL, CHANGE categorias_id categoria_id INT NOT NULL');
        $this->addSql('ALTER TABLE productos ADD CONSTRAINT FK_767490E63397707A FOREIGN KEY (categoria_id) REFERENCES categorias (id)');
        $this->addSql('CREATE INDEX IDX_767490E63397707A ON productos (categoria_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE productos DROP FOREIGN KEY FK_767490E63397707A');
        $this->addSql('DROP INDEX IDX_767490E63397707A ON productos');
        $this->addSql('ALTER TABLE productos DROP nombre, CHANGE categoria_id categorias_id INT NOT NULL');
        $this->addSql('ALTER TABLE productos ADD CONSTRAINT FK_767490E65792B277 FOREIGN KEY (categorias_id) REFERENCES categorias (id)');
        $this->addSql('CREATE INDEX IDX_767490E65792B277 ON productos (categorias_id)');
    }
}
