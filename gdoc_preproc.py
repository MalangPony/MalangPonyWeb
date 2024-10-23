with open("ruledoc.html","r",encoding="utf-8") as f:
	s=f.read()

'''
body_css_idx=s.index("{background-color:#ffffff;max-width:468pt;padding:72pt 72pt 72pt 72pt}")
start_idx=body_css_idx
end_idx=body_css_idx
while True:
	if s[start_idx]==".":
		break
	start_idx-=1
while True:
	if s[end_idx]=="}":
		break
	end_idx+=1
s=s[:start_idx]+s[end_idx+1:]
'''
s=s.replace(
	"{background-color:#ffffff;max-width:468pt;padding:72pt 72pt 72pt 72pt}",
	"{background-color:#ffffff;}")

with open("ruledoc_edit.html","w",encoding="utf-8") as f:
	f.write(s)
