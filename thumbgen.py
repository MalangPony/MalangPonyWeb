#!/usr/bin/env python3
import os
import os.path
import subprocess

DIR_ORIG="fanarts_orig"
DIR_DEST="fanarts_thumb"

if os.path.exists(DIR_DEST):
	print("Remove destination dir...")
	subprocess.run(["rm","-r",DIR_DEST],check=True)
print("Create destination dir...")
subprocess.run(["mkdir",DIR_DEST],check=True)

for filename in os.listdir(DIR_ORIG):
	purename,ext=os.path.splitext(filename)
	fp_orig=os.path.join(DIR_ORIG,filename)
	fp_dest=os.path.join(DIR_DEST,purename+"_THUMB.jpg")
	
	args=["magick",fp_orig,"-resize","640x480",fp_dest]
	print(">"+" ".join(args))
	subprocess.run(args,check=True)
