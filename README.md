# Directory-structure-to-CSV
PHP script to write directory structure in CSV file.
The PHP script assumes a directory is present with name 'images', which contains multiple directories with images inside.
Script traverse the directory sturcture, and generate CSV file with column headers 'Image-directory' and 'Image-list'.
'Image directory' holds the directory names, and 'Image-list' holds the list of image files inside that directory.

Example,

Directory sructure,

  images
      directory01
          image01.jpg
          image02.jpg
          image03.jpg
      directory02
          image11.jpg
          image12.jpg
          image13.jpg
          
imagelist.csv,

| Image-directory |           Image-list                 |
__________________________________________________________
| directory01     | image01.jpg,image02.jpg,image03.jpg, |
| directory02     | image11.jpg,image12.jpg,image13.jpg, |
 
