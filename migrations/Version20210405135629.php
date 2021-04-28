<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210405135629 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE client (id INT AUTO_INCREMENT NOT NULL, permis_id_id INT DEFAULT NULL, vehicule_id_id INT DEFAULT NULL, nom VARCHAR(100) NOT NULL, prenom VARCHAR(200) NOT NULL, sexe VARCHAR(10) NOT NULL, telephone VARCHAR(100) NOT NULL, email VARCHAR(200) NOT NULL, date_naissanse DATE NOT NULL, adresse VARCHAR(200) NOT NULL, photo LONGBLOB NOT NULL, INDEX IDX_C74404557716ECF9 (permis_id_id), INDEX IDX_C74404554F9D6605 (vehicule_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cours (id INT AUTO_INCREMENT NOT NULL, formateur_id_id INT DEFAULT NULL, lecon_id_id INT DEFAULT NULL, client_id_id INT DEFAULT NULL, duree INT NOT NULL, date_cours DATETIME NOT NULL, INDEX IDX_FDCA8C9CA2FE286F (formateur_id_id), INDEX IDX_FDCA8C9CF5959181 (lecon_id_id), INDEX IDX_FDCA8C9CDC2902E0 (client_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE formateur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(100) NOT NULL, prenom VARCHAR(200) NOT NULL, adresse VARCHAR(100) NOT NULL, telephone VARCHAR(100) NOT NULL, email VARCHAR(200) NOT NULL, photo VARCHAR(200) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lecon (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(200) NOT NULL, duree INT NOT NULL, type_lecon VARCHAR(100) NOT NULL, date DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE paiement_client (id INT AUTO_INCREMENT NOT NULL, client_id_id INT DEFAULT NULL, montant INT NOT NULL, date_paiement DATETIME NOT NULL, description VARCHAR(200) NOT NULL, mode_paiement VARCHAR(200) NOT NULL, INDEX IDX_4AE49145DC2902E0 (client_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE paiement_formateur (id INT AUTO_INCREMENT NOT NULL, formateur_id_id INT DEFAULT NULL, montant INT NOT NULL, date_paiement DATETIME NOT NULL, description VARCHAR(200) NOT NULL, INDEX IDX_2BB00005A2FE286F (formateur_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE permis (id INT AUTO_INCREMENT NOT NULL, type_permis VARCHAR(45) NOT NULL, description VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vehicule (id INT AUTO_INCREMENT NOT NULL, immatriculation VARCHAR(100) NOT NULL, marque VARCHAR(100) NOT NULL, couleur VARCHAR(45) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE client ADD CONSTRAINT FK_C74404557716ECF9 FOREIGN KEY (permis_id_id) REFERENCES permis (id)');
        $this->addSql('ALTER TABLE client ADD CONSTRAINT FK_C74404554F9D6605 FOREIGN KEY (vehicule_id_id) REFERENCES vehicule (id)');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9CA2FE286F FOREIGN KEY (formateur_id_id) REFERENCES formateur (id)');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9CF5959181 FOREIGN KEY (lecon_id_id) REFERENCES lecon (id)');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9CDC2902E0 FOREIGN KEY (client_id_id) REFERENCES lecon (id)');
        $this->addSql('ALTER TABLE paiement_client ADD CONSTRAINT FK_4AE49145DC2902E0 FOREIGN KEY (client_id_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE paiement_formateur ADD CONSTRAINT FK_2BB00005A2FE286F FOREIGN KEY (formateur_id_id) REFERENCES formateur (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE paiement_client DROP FOREIGN KEY FK_4AE49145DC2902E0');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9CA2FE286F');
        $this->addSql('ALTER TABLE paiement_formateur DROP FOREIGN KEY FK_2BB00005A2FE286F');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9CF5959181');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9CDC2902E0');
        $this->addSql('ALTER TABLE client DROP FOREIGN KEY FK_C74404557716ECF9');
        $this->addSql('ALTER TABLE client DROP FOREIGN KEY FK_C74404554F9D6605');
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE cours');
        $this->addSql('DROP TABLE formateur');
        $this->addSql('DROP TABLE lecon');
        $this->addSql('DROP TABLE paiement_client');
        $this->addSql('DROP TABLE paiement_formateur');
        $this->addSql('DROP TABLE permis');
        $this->addSql('DROP TABLE vehicule');
    }
}
