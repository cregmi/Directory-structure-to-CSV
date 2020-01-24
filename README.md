# Directory-structure-to-CSV
PHP script to write directory structure in CSV file.
The PHP script assumes a directory is present with name 'images', which contains multiple directories with images inside. The PHP script file and the directory 'images' should be in same file location. Script traverse the directory sturcture, and generate CSV file with column headers 'Image-directory' and 'Image-list'. 'Image-directory' holds the directory names, and 'Image-list' holds the list of image files inside that directory.

Example,

Directory sructure,
<pre>
The-PHP-Script
|
images
|
|------directory01
|      |----image01.jpg
|      |----image02.jpg
|      |----image03.jpg
|
|------directory02
|      |----image11.jpg
|      |----image12.jpg
|      |----image13.jpg
|
other directories / files...
</pre> 

When the PHP script is run for above given example, imagelist.csv with two columns and two rows, as shown below, is generated and downloaded.

Image-directory | Image-list
--------------- | -------------------------------
directory01     | image01.jpg,image02.jpg,image03.jpg,
directory02     | image11.jpg,image12.jpg,image13.jpg,

