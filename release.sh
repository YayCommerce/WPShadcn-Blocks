#!/bin/bash
#
# Release script for wpshadcn-blocks plugin
# Creates a distribution ZIP with only production files
#
set -e

PLUGIN_SLUG="wpshadcn-blocks"
PLUGIN_FILE="wpshadcn-blocks.php"
SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"

cd "$SCRIPT_DIR"

# Extract version from plugin header
VERSION=$(grep -o "Version: [0-9.]*" "$PLUGIN_FILE" | cut -d' ' -f2)

if [ -z "$VERSION" ]; then
    echo "Error: Could not extract version from $PLUGIN_FILE"
    exit 1
fi

echo "Building $PLUGIN_SLUG v$VERSION..."

# Clean previous build
echo "Cleaning previous build..."
rm -rf build/

# Run production build
echo "Running npm build..."
npm run build

# Create temp directory
TEMP_DIR=$(mktemp -d)
DEST_DIR="$TEMP_DIR/$PLUGIN_SLUG"
mkdir -p "$DEST_DIR"

# Copy release files
echo "Copying release files..."

# Main plugin file
cp "$PLUGIN_FILE" "$DEST_DIR/"

# PHP includes
if [ -d "inc" ]; then
    cp -r inc "$DEST_DIR/"
fi

# Build assets
if [ -d "build" ]; then
    cp -r build "$DEST_DIR/"
fi

# Languages
if [ -d "languages" ]; then
    cp -r languages "$DEST_DIR/"
fi

# Readme (for WordPress.org)
if [ -f "readme.txt" ]; then
    cp readme.txt "$DEST_DIR/"
fi

# Create ZIP
ZIP_NAME="${PLUGIN_SLUG}-${VERSION}.zip"
echo "Creating $ZIP_NAME..."

cd "$TEMP_DIR"
zip -rq "$ZIP_NAME" "$PLUGIN_SLUG"
mv "$ZIP_NAME" "$SCRIPT_DIR/"
cd "$SCRIPT_DIR"

# Cleanup
rm -rf "$TEMP_DIR"

# Output result
FILE_SIZE=$(du -h "$ZIP_NAME" | cut -f1)
echo ""
echo "----------------------------------------"
echo "Release created successfully!"
echo "File: $ZIP_NAME"
echo "Size: $FILE_SIZE"
echo "----------------------------------------"
