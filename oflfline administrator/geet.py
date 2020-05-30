#!/usr/bin/env python3 
print('Initiating geet')

from os import listdir,path,walk
from time import ctime 
import json

exclude = [".git","offline administrator"]

def init_geet(workingDir):

	obj = []
	a=0
	Dir = []
	Dir.append(workingDir)

	for root,dirs,files in walk(workingDir):
		if(root.startswith("../.g")):
			continue
		if(root == "../"):
			obj = updates(root,files,dirs,obj)

			with open('home.json', 'w') as outfile:  
				json.dump(obj, outfile,indent=4)
			obj = []

			Dir = Dir + dirs
			Dir.remove(".git")	
		x = Dir[a]
		#print("root : ",root, " x : ",x)
		if not root.startswith("../" + x):
			with open(x + '.json', 'w') as outfile:  
				json.dump(obj, outfile,indent=4)
			obj = []
			
			a=a+1
			print("Dir Change : " + Dir[a])
			x = Dir[a]
		
		obj = updates(root,files,dirs,obj)

def checkDiff(tempdata,filename):
	filename = filename.lstrip('../')
	print("Reading : ",filename)
	with open(filename + '.json') as json_file :
		filedata = json.load(json_file)
		diff= len(tempdata)-len(filedata)
		if(diff==0):
			print("No new files added")
		elif(diff<0):
			print(diff,"files are deleted")
	
		for x in range(len(tempdata)) :
			modified = 0
			if tempdata[x] not in filedata:
		
				blah = tempdata[x]
				try :
					if blah['name'] is filedata[x]['name']:
						print ("modified exactly")
						continue
				except IndexError as error : 
					print("New files added error")
				else:
					for z in range(len(filedata)):
						if blah['name'] in filedata[z]['name']:
							print ("modified and change in tree", filedata[z])
							modified=1
							break
		else:
			print(diff,"files are added")
				


		for x in range(len(filedata)) :
				if filedata[x] not in tempdata:
					print(";o;",filedata[x])


def tempMeta(workingDir):
	obj = []
	a=0
	Dir = []
	Dir.append(workingDir)

	for root,dirs,files in walk(workingDir):
		if(root.startswith("../.g")):
			continue
		if(root == workingDir):
			Dir = Dir + dirs
			try :
				Dir.remove(".git")	
			except:
				print("Not present")			
			x="home"
			obj = updates(root,files,dirs,obj)

		else :
			x=Dir[a]
		
		if not root.startswith("../" + x):
			checkDiff(obj,x)
			obj = []
			
			a=a+1
			print("Dir Change : " + Dir[a])
			x = Dir[a]
		
		for dirname in dirs :
			meta = {
				"name" : dirname,
				"date" : ctime(path.getmtime(root + '/' + dirname)),
				"DIR" : "true"
			}
			obj.append(meta)

		for filename in files :
			meta = {
				"name" : filename,
				"date" : ctime(path.getmtime(root + '/' + filename))
			}
			obj.append(meta)

def updates(root,files,dirs,obj):
	for dirname in dirs :
		meta = {
			"name" : dirname,
			"date" : ctime(path.getmtime(root + '/' + dirname)),
			"DIR" : "true"
		}
		obj.append(meta)

	for filename in files :
		meta = {
			"name" : filename,
			"date" : ctime(path.getmtime(root + '/' + filename))
		}
		obj.append(meta)
	return obj


#init_geet("../")
tempMeta("../")

	
#def checkDiff(tempdata,filename): 
#	with open(filename+'.txt') as json_file:  
#    	data = json.load(json_file)
#    	print(data)
#sys.setrecursionlimit(1000)

#def enlist(startDir,level):
#	#for z in range(times):		
#	files = listdir(startDir)
#	Dir = []
#	cwd = path.abspath(startDir)
#	for x in files:
#		
#		if(path.isdir(cwd+'/'+x) and not x.startswith('.')) :
#			if(level==0) :			
#				dirTag = "DIR"
#			else:
#				dirTag = "D+0"
#			Dir.append(cwd + '/' + x)
#			level +=1
#			enlist(cwd + "/" + x,level)
#		else :
#			dirTag = "   "
#		print(ctime(path.getmtime(cwd + '/' + x)) +"  " + dirTag + "  " + cwd + '/' + x )
	#enlist(Dir,len(Dir))
#print(len(Dir))
#for x in range(len(Dir)) : 
#	print(Dir[x])

#enlist("../",0)