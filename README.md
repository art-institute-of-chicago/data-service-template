![Art Institute of Chicago](https://raw.githubusercontent.com/Art-Institute-of-Chicago/template/master/aic-logo.gif)

# Data Service Template
> A cloneable repo containing examples and architecture for new dataservices

This repo is meant to be cloned whenever we need to create a new dataservice for our data hub. It was derived from existing dataservices, with a focus towards simplicity and reliability.



## Instructions

1. Create a new `data-service-foobar` repo on GitHub.

2. Run the following command, or something similar:

```bash
DS_NAME="foobar"; \
git clone "https://github.com/art-institute-of-chicago/data-service-template.git" "data-service-$DS_NAME"; \
cd "data-service-$DS_NAME"; \
git remote set-url origin "https://github.com/art-institute-of-chicago/data-service-$DS_NAME.git"
```

The idea is to clone this repo into a new directory, and replace its `origin` remote with the new dataservice repo on GitHub. In the process, we remove its reference to `data-service-template`.

If desired, you can also squash its history. Here's how to do it while leaving the initial commit intact:

```bash
git reset 8d79a4e
git add --all
git commit -m "Add initial boilerplace"
```

Unfortunately, we cannot use `composer create-project` in this context.
