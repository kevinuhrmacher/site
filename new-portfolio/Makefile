GOOGLE_DOC_ID = 1V22NQvgEaFTOfU-N7Qj0fiNiMSAGsTqGHO7hzE4Pcd0

.PHONY: data/projects.json data/archive.json

all: data/projects.json data/archive.json

data/projects.json:
	gsjson $(GOOGLE_DOC_ID) data/projects.json

data/archive.json:
	gsjson $(GOOGLE_DOC_ID) data/archive.json -w "archive"