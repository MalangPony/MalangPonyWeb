import os

master="index.html"

files=os.listdir()
targets=[]
for f in files:
	if (f != master) and (f.endswith(".html")):
		targets.append(f)

with open(master,"r",encoding="utf-8") as f:
	html_master=f.read()

template_pre=html_master[:html_master.index("<!--PY/REPL/BEGIN-->")]
template_post=html_master[html_master.index("<!--PY/REPL/END-->")+18:]

#print(repr(template_pre))
#print(repr(template_post))

for t in targets:
	with open(t,"r",encoding="utf-8") as f:
		html=f.read()
	# we must include the markers or we will regret it in the next run
	inner=html[
		html.index("<!--PY/REPL/BEGIN-->") :
		html.index("<!--PY/REPL/END-->")+18]
	with open(t,"w",encoding="utf-8") as f:
		f.write(template_pre+inner+template_post)
