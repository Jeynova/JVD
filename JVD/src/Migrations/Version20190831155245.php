<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190831155245 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE tag (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tag_user (tag_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_639C69FFBAD26311 (tag_id), INDEX IDX_639C69FFA76ED395 (user_id), PRIMARY KEY(tag_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, city VARCHAR(255) DEFAULT NULL, country VARCHAR(255) NOT NULL, avatar VARCHAR(255) DEFAULT NULL, mailtoken VARCHAR(255) DEFAULT NULL, is_validated TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `like` (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, picture_id INT DEFAULT NULL, INDEX IDX_AC6340B3A76ED395 (user_id), INDEX IDX_AC6340B3EE45BDBF (picture_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE account_follow (id INT AUTO_INCREMENT NOT NULL, date DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE account_follow_user (account_follow_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_6213D917A56B0BE7 (account_follow_id), INDEX IDX_6213D917A76ED395 (user_id), PRIMARY KEY(account_follow_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE album (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, is_private TINYINT(1) NOT NULL, INDEX IDX_39986E43A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE album_tag (album_id INT NOT NULL, tag_id INT NOT NULL, INDEX IDX_6397379A1137ABCF (album_id), INDEX IDX_6397379ABAD26311 (tag_id), PRIMARY KEY(album_id, tag_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE comment (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, picture_id INT DEFAULT NULL, content VARCHAR(255) NOT NULL, date DATE NOT NULL, INDEX IDX_9474526CA76ED395 (user_id), INDEX IDX_9474526CEE45BDBF (picture_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE picture (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, title VARCHAR(255) NOT NULL, date DATE NOT NULL, description VARCHAR(255) NOT NULL, INDEX IDX_16DB4F89A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE picture_tag (picture_id INT NOT NULL, tag_id INT NOT NULL, INDEX IDX_336D34B0EE45BDBF (picture_id), INDEX IDX_336D34B0BAD26311 (tag_id), PRIMARY KEY(picture_id, tag_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE picture_album (picture_id INT NOT NULL, album_id INT NOT NULL, INDEX IDX_B942E90DEE45BDBF (picture_id), INDEX IDX_B942E90D1137ABCF (album_id), PRIMARY KEY(picture_id, album_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE tag_user ADD CONSTRAINT FK_639C69FFBAD26311 FOREIGN KEY (tag_id) REFERENCES tag (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tag_user ADD CONSTRAINT FK_639C69FFA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE `like` ADD CONSTRAINT FK_AC6340B3A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE `like` ADD CONSTRAINT FK_AC6340B3EE45BDBF FOREIGN KEY (picture_id) REFERENCES picture (id)');
        $this->addSql('ALTER TABLE account_follow_user ADD CONSTRAINT FK_6213D917A56B0BE7 FOREIGN KEY (account_follow_id) REFERENCES account_follow (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE account_follow_user ADD CONSTRAINT FK_6213D917A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE album ADD CONSTRAINT FK_39986E43A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE album_tag ADD CONSTRAINT FK_6397379A1137ABCF FOREIGN KEY (album_id) REFERENCES album (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE album_tag ADD CONSTRAINT FK_6397379ABAD26311 FOREIGN KEY (tag_id) REFERENCES tag (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526CA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526CEE45BDBF FOREIGN KEY (picture_id) REFERENCES picture (id)');
        $this->addSql('ALTER TABLE picture ADD CONSTRAINT FK_16DB4F89A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE picture_tag ADD CONSTRAINT FK_336D34B0EE45BDBF FOREIGN KEY (picture_id) REFERENCES picture (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE picture_tag ADD CONSTRAINT FK_336D34B0BAD26311 FOREIGN KEY (tag_id) REFERENCES tag (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE picture_album ADD CONSTRAINT FK_B942E90DEE45BDBF FOREIGN KEY (picture_id) REFERENCES picture (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE picture_album ADD CONSTRAINT FK_B942E90D1137ABCF FOREIGN KEY (album_id) REFERENCES album (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE tag_user DROP FOREIGN KEY FK_639C69FFBAD26311');
        $this->addSql('ALTER TABLE album_tag DROP FOREIGN KEY FK_6397379ABAD26311');
        $this->addSql('ALTER TABLE picture_tag DROP FOREIGN KEY FK_336D34B0BAD26311');
        $this->addSql('ALTER TABLE tag_user DROP FOREIGN KEY FK_639C69FFA76ED395');
        $this->addSql('ALTER TABLE `like` DROP FOREIGN KEY FK_AC6340B3A76ED395');
        $this->addSql('ALTER TABLE account_follow_user DROP FOREIGN KEY FK_6213D917A76ED395');
        $this->addSql('ALTER TABLE album DROP FOREIGN KEY FK_39986E43A76ED395');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526CA76ED395');
        $this->addSql('ALTER TABLE picture DROP FOREIGN KEY FK_16DB4F89A76ED395');
        $this->addSql('ALTER TABLE account_follow_user DROP FOREIGN KEY FK_6213D917A56B0BE7');
        $this->addSql('ALTER TABLE album_tag DROP FOREIGN KEY FK_6397379A1137ABCF');
        $this->addSql('ALTER TABLE picture_album DROP FOREIGN KEY FK_B942E90D1137ABCF');
        $this->addSql('ALTER TABLE `like` DROP FOREIGN KEY FK_AC6340B3EE45BDBF');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526CEE45BDBF');
        $this->addSql('ALTER TABLE picture_tag DROP FOREIGN KEY FK_336D34B0EE45BDBF');
        $this->addSql('ALTER TABLE picture_album DROP FOREIGN KEY FK_B942E90DEE45BDBF');
        $this->addSql('DROP TABLE tag');
        $this->addSql('DROP TABLE tag_user');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE `like`');
        $this->addSql('DROP TABLE account_follow');
        $this->addSql('DROP TABLE account_follow_user');
        $this->addSql('DROP TABLE album');
        $this->addSql('DROP TABLE album_tag');
        $this->addSql('DROP TABLE comment');
        $this->addSql('DROP TABLE picture');
        $this->addSql('DROP TABLE picture_tag');
        $this->addSql('DROP TABLE picture_album');
    }
}
