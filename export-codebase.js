const fs = require('fs');
const path = require('path');

// --- Configuration ---
// You can customize these settings to fit your project structure.

// 1. The name of the final output file.
const OUTPUT_FILE = 'codebase.txt';

// 2. The directories and files to include in the export.
//    Using '.' includes everything in the current directory.
const INCLUDE_PATHS = ['.']; 

// 3. File extensions to look for.
const INCLUDE_EXTENSIONS = ['.html', '.css', '.js', '.md'];

// 4. Directories and files to completely ignore.
const IGNORE_PATHS = [
    '.git',               // Ignore the git repository folder
    'node_modules',       // Ignore installed packages
    OUTPUT_FILE,          // Ignore the script's own output file
    'Dockerfile',         // Ignore Docker configuration
    'docker-compose.yml',
    'export-codebase.js'  // Ignore this script itself
];
// --- End of Configuration ---

let outputContent = `=== Codebase Export | ${new Date().toUTCString()} ===\n\n`;
const projectRoot = process.cwd();

console.log('Starting codebase export...');

// A function to recursively walk through directories
const walkDirectory = (dir) => {
    const files = fs.readdirSync(dir);

    for (const file of files) {
        const fullPath = path.join(dir, file);
        const relativePath = path.relative(projectRoot, fullPath);

        // Check if the current path should be ignored
        if (IGNORE_PATHS.some(ignored => relativePath.startsWith(ignored))) {
            continue;
        }

        const stats = fs.statSync(fullPath);

        if (stats.isDirectory()) {
            walkDirectory(fullPath); // Recurse into subdirectories
        } else if (stats.isFile() && INCLUDE_EXTENSIONS.includes(path.extname(file))) {
            console.log(`Adding: ${relativePath}`);
            const content = fs.readFileSync(fullPath, 'utf8');
            outputContent += `=== ${relativePath.replace(/\\/g, '/')} ===\n`; // Standardize path separators
            outputContent += `${content}\n\n`;
        }
    }
};

// Start the process from all specified include paths
INCLUDE_PATHS.forEach(p => {
    const fullPath = path.join(projectRoot, p);
    if (fs.existsSync(fullPath)) {
        walkDirectory(fullPath);
    } else {
        console.warn(`Warning: Path '${p}' not found. Skipping.`);
    }
});

// Write the final combined content to the output file
fs.writeFileSync(OUTPUT_FILE, outputContent);

console.log(`\nExport complete!`);
console.log(`Codebase written to: ${path.join(projectRoot, OUTPUT_FILE)}`);
