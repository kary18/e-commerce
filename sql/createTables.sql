
  -- Structure de la table `commandes`


CREATE TABLE `commandes` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `produits_id` int(11) NOT NULL,
  `clients_id` int(11) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Index pour la table `commandes`
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produits_id` (`produits_id`),
  ADD KEY `clients_id` (`clients_id`);

  -- AUTO_INCREMENT pour la table `commandes`

ALTER TABLE `commandes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

 -- Structure de la table `marques`
--

CREATE TABLE `marques` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `marques`
--

INSERT INTO `marques` (`id`, `nom`) VALUES
(1, 'kary'),
(2, 'manou'),
(4, 'alpha');


-- Index pour la table `marques`

ALTER TABLE `marques`
  ADD PRIMARY KEY (`id`);




-- AUTO_INCREMENT pour la table `marques`

ALTER TABLE `marques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

  -- Structure de la table `produits`


CREATE TABLE `produits` (
  `id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `prix` decimal(10,0) NOT NULL,
  `marque_id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `marque_id` (`marque_id`),
  ADD KEY `categories_id` (`categories_id`);

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

-- Contraintes pour la table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `FK_PRODUITS_CATEGORIES` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `FK_PRODUITS_MARQUES` FOREIGN KEY (`marque_id`) REFERENCES `marques` (`id`);
