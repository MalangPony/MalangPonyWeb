# MalangPony Website
Website for the MalangPony event in Korea.  
More or less static. PHP was used primarily for its `include` functionality.  
Some files, most notably the gallery images, are missing from this repository. However, simply cloning this repo under a PHP-enabled server should get you a functional website.    

### Branches
`mpn2025pre` MalangPony 2025 website, BEFORE the event. (currently on [2025.malangpony.com](https://2025.malangpony.com/))  
`mpn2025post` MalangPony 2025 website, AFTER the event. (currently on [malangpony.com](https://malangpony.com/))  

### Pre-processing
There are some Python scripts for pre-processing some data.  
`gdoc_preproc.py` Pre-processes the Rule document (`ruledoc.html`) so it can be embedded at `rule.php`.  
`thumbgen.py` generates thumbnails and HTML for the gallery (`gallery.php`)  
