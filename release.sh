#!/bin/bash
#
# Release script for yaycommerce-blocks-for-shadcn-ui plugin
# Creates a distribution ZIP with only production files
#
set -e

PLUGIN_SLUG="yaycommerce-blocks-for-shadcn-ui"
PLUGIN_FILE="yaycommerce-blocks-for-shadcn-ui.php"
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

# Shadcn AI stays out of the WordPress.org build for now; the main plugin
# file only loads it when the directory is present.
rm -rf "$DEST_DIR/inc/ShadcnAi"

# Build assets
if [ -d "build" ]; then
    cp -r build "$DEST_DIR/"
fi

# Block patterns (the Shadcn AI plans from these)
if [ -d "patterns" ]; then
    cp -r patterns "$DEST_DIR/"
fi

# Languages
if [ -d "languages" ]; then
    cp -r languages "$DEST_DIR/"
fi

# Readme (for WordPress.org)
if [ -f "readme.txt" ]; then
    cp readme.txt "$DEST_DIR/"
fi

# Static assets the patterns point at (the placeholder image)
if [ -d "assets" ]; then
    cp -r assets "$DEST_DIR/"
fi

# Editor stylesheet, which inc/Plugin.php loads from src/ rather than build/
if [ -f "src/editor-styles.css" ]; then
    mkdir -p "$DEST_DIR/src"
    cp src/editor-styles.css "$DEST_DIR/src/"
fi

# Lucide license, required because inc/icon-map.php ships their icon SVGs
if [ -f "LICENSE-lucide.txt" ]; then
    cp LICENSE-lucide.txt "$DEST_DIR/"
fi

# Drop macOS metadata that cp -r drags along
find "$DEST_DIR" -name ".DS_Store" -delete

# Fail loudly when a file the plugin loads at runtime did not make it in,
# rather than shipping a ZIP that 404s once the plugin is installed somewhere else.
for required in \
    "yaycommerce-blocks-for-shadcn-ui.php" \
    "inc/icon-map.php" \
    "assets/images/placeholder.svg" \
    "src/editor-styles.css" \
    "build/extensions/core-button-icon.js" \
    "build/blocks/live-purchase/view.js" \
    "inc/LivePurchase/RestController.php"
do
    if [ ! -f "$DEST_DIR/$required" ]; then
        echo "Error: $required is missing from the release"
        exit 1
    fi
done

if [ -e "$DEST_DIR/inc/ShadcnAi" ]; then
    echo "Error: inc/ShadcnAi must not ship in the release"
    exit 1
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
