# PAGE ANALYSIS MODULE FOR FUEL CMS
This is a [FUEL CMS](http://www.getfuelcms.com) page_analysis module for adding page_analysis like functionality including posts, categories, and commenting.

## INSTALLATION
There are a couple ways to install the module. If you are using GIT you can use the following method
to create a submodule:

### USING GIT
1. Open up a Terminal window, "cd" to your FUEL CMS installation then type type in: 
Type in:
``php index.php fuel/installer/add_git_submodule git://github.com/daylightstudio/FUEL-CMS-Page-Analysis-Module.git page_analysis``

2. Then to install, type in:
``php index.php fuel/installer/install page_analysis``


### MANUAL
1. Download the zip file from GitHub:
[https://github.com/daylightstudio/FUEL-CMS-Page-Analysis-Module](https://github.com/daylightstudio/FUEL-CMS-page_analysis-Module)

2. Create a "page_analysis" folder in fuel/modules/ and place the contents of the page_analysis module folder in there.

3. Then to install, open up a Terminal window, "cd" to your FUEL CMS installation then type type in:
``php index.php fuel/installer/install page_analysis``

## UNINSTALL

To uninstall the module which will remove any permissions and database information:
``php index.php fuel/installer/uninstall page_analysis``

### TROUBLESHOOTING
1. You may need to put in your full path to the "php" interpreter when using the terminal.
2. You must have access to an internet connection to install using GIT.


## DOCUMENTATION
To access the documentation, you can visit it [here](http://www.getfuelcms.com/user_guide/modules/page_analysis).

## TEAM
* David McReynolds, Daylight Studio, Main Developer

## BUGS
To file a bug report, go to the [issues](https://github.com/daylightstudio/FUEL-CMS-Page-Analysis-Module/issues) page.

## LICENSE
The page_analysis Module for FUEL CMS is licensed under [APACHE 2](http://www.apache.org/licenses/LICENSE-2.0).