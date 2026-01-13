export async function lucideSVG(icon, size, color) {
  if (!icon) {
    return '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"></svg>';
  }

  try {
    const response = await fetch(
      `https://cdn.jsdelivr.net/npm/lucide-static@latest/icons/${icon}.svg`
    );
    const svgContent = await response.text();

    // Extract the path/group content from the SVG
    const parser = new DOMParser();
    const doc = parser.parseFromString(svgContent, "image/svg+xml");
    const svgElement = doc.querySelector("svg");

    if (!svgElement) {
      return '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"></svg>';
    }

    // Get the inner content (paths, circles, etc.)
    const innerContent = svgElement.innerHTML;

    // Ensure size has 'px' suffix
    const sizeValue =
      size && typeof size === "string" && size.includes("px")
        ? size
        : size
        ? `${size}px`
        : "24px";

    // Build the new SVG with our attributes
    return `
        <svg xmlns="http://www.w3.org/2000/svg"
            width="${sizeValue}"
            height="${sizeValue}"
            viewBox="0 0 24 24"
            fill="none"
            stroke="${color || "currentColor"}"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round">
        ${innerContent}
        </svg>
    `;
  } catch (error) {
    console.error("Error loading Lucide icon:", error);
    return '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"></svg>';
  }
}
