
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
