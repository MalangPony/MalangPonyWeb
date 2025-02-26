#!/usr/bin/env python3
import os
import os.path
import subprocess

DIR_ORIG="gallery_orig"
DIR_DEST="gallery_thumb"
PHP_FILE="gallery_inner.php"

if os.path.exists(DIR_DEST):
	print("Remove destination dir...")
	subprocess.run(["rm","-r",DIR_DEST],check=True)
print("Create destination dir...")
subprocess.run(["mkdir",DIR_DEST],check=True)

php_content=''
images=list(os.listdir(DIR_ORIG))
images.sort()
for filename in images:
	purename,ext=os.path.splitext(filename)
	fp_orig=os.path.join(DIR_ORIG,filename)
	fp_dest=os.path.join(DIR_DEST,purename+"_THUMB.jpg")
	
	args=["magick",fp_orig,"-resize","640x480","-quality","80",fp_dest]
	print(">"+" ".join(args))
	subprocess.run(args,check=True)
	
	php_content+='<div class="fanart_container">\n'
	php_content+=F'<a href="{fp_orig}">\n'
	php_content+=F'<img class="fanart_thumb" src="{fp_dest}">\n'
	php_content+='</a>\n'
	php_content+='</div>\n'

with open(PHP_FILE,"w",encoding="utf-8") as f:
	f.write(php_content)
