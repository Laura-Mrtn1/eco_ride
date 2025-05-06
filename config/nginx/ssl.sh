#!/bin/bash

# Répertoire où les certificats seront stockés
CERTS_DIR="/etc/nginx/certs"

# Vérifie si les certificats existent déjà
if [ ! -f "$CERTS_DIR/selfsigned.crt" ] || [ ! -f "$CERTS_DIR/selfsigned.key" ]; then
  echo "Les certificats SSL n'existent pas, génération en cours..."

  # Créer un répertoire pour les certificats si nécessaire
  mkdir -p $CERTS_DIR

  # Générer un certificat auto-signé avec OpenSSL
  openssl req -x509 -nodes -days 365 \
    -newkey rsa:2048 \
    -keyout $CERTS_DIR/selfsigned.key \
    -out $CERTS_DIR/selfsigned.crt \
    -subj "/CN=localhost"

  echo "Certificats générés avec succès : $CERTS_DIR/selfsigned.crt et $CERTS_DIR/selfsigned.key"
else
  echo "Les certificats SSL existent déjà, aucun besoin de les régénérer."
fi
