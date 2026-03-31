#!/bin/bash
# Copies images from the Gatsby project into the WordPress theme's assets/images directory.
# Run this from inside citytree-wp-theme/:
#   bash copy-images.sh

GATSBY_IMAGES="../citytree/src/assets/images"
DEST="./assets/images"

echo "Copying images from $GATSBY_IMAGES → $DEST ..."
cp -r "$GATSBY_IMAGES/." "$DEST/"
echo "Done."
