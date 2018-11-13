<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181113105445 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE questions (id INT AUTO_INCREMENT NOT NULL, subject VARCHAR(255) DEFAULT NULL, subsubject VARCHAR(255) DEFAULT NULL, questionid VARCHAR(255) NOT NULL, questionvalue INT NOT NULL, questioncontent VARCHAR(255) NOT NULL, images JSON DEFAULT NULL COMMENT \'(DC2Type:json_array)\', correctanswer VARCHAR(255) NOT NULL, aanswer VARCHAR(255) NOT NULL, aexplanation VARCHAR(255) DEFAULT NULL, banswer VARCHAR(255) NOT NULL, bexplanation VARCHAR(255) DEFAULT NULL, canswer VARCHAR(255) DEFAULT NULL, cexplanation VARCHAR(255) DEFAULT NULL, danswer VARCHAR(255) DEFAULT NULL, dexplanation VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, avatar VARCHAR(255) DEFAULT NULL, about VARCHAR(255) DEFAULT NULL, role JSON NOT NULL COMMENT \'(DC2Type:json_array)\', email VARCHAR(255) NOT NULL, stats JSON DEFAULT NULL COMMENT \'(DC2Type:json_array)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE questions');
        $this->addSql('DROP TABLE user');
    }
}
