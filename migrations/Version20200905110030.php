<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200905110030 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE affaire (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, title_en VARCHAR(255) NOT NULL, title_fr VARCHAR(255) NOT NULL, content LONGTEXT DEFAULT NULL, content_en LONGTEXT DEFAULT NULL, content_fr LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ambassador (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, title_en VARCHAR(255) NOT NULL, title_fr VARCHAR(255) NOT NULL, content LONGTEXT DEFAULT NULL, content_en LONGTEXT DEFAULT NULL, content_fr LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE booking_with_ambassador (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, phone VARCHAR(255) NOT NULL, date VARCHAR(255) NOT NULL, reason VARCHAR(255) NOT NULL, civil_number VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE relation (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, title_en VARCHAR(255) NOT NULL, title_fr VARCHAR(255) NOT NULL, content LONGTEXT DEFAULT NULL, content_en LONGTEXT DEFAULT NULL, content_fr LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE section (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, title_en VARCHAR(255) NOT NULL, title_fr VARCHAR(255) NOT NULL, content LONGTEXT DEFAULT NULL, content_en LONGTEXT DEFAULT NULL, content_fr LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE visa (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, title_en VARCHAR(255) NOT NULL, title_fr VARCHAR(255) NOT NULL, content LONGTEXT DEFAULT NULL, content_en LONGTEXT DEFAULT NULL, content_fr LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE article ADD title_en VARCHAR(255) NOT NULL, ADD description_en LONGTEXT DEFAULT NULL, ADD title_fr VARCHAR(255) NOT NULL, ADD description_fr LONGTEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE slider ADD caption_en VARCHAR(255) NOT NULL, ADD caption_fr VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE affaire');
        $this->addSql('DROP TABLE ambassador');
        $this->addSql('DROP TABLE booking_with_ambassador');
        $this->addSql('DROP TABLE relation');
        $this->addSql('DROP TABLE section');
        $this->addSql('DROP TABLE visa');
        $this->addSql('ALTER TABLE article DROP title_en, DROP description_en, DROP title_fr, DROP description_fr');
        $this->addSql('ALTER TABLE slider DROP caption_en, DROP caption_fr');
    }
}
