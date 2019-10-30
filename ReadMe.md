# Version Compare

Compares 2 strings as version numbers and returns a string indicating if the first string is before, after, or equal to the second string.  

## URL
 https://www.customtechnologyltd.com/compareVersions.php 
## Method: 
GET 
## URL Params
 Required: v1=[first version number]
v2=[second version number]

Version numbers should comply with [Semantic Versioning 2.0](https://semver.org/)

i.e. X.Y.Z where X, Y, and Z are non-negative integers, and MUST NOT contain leading zeroes. X is the major version, Y is the minor version, and Z is the patch version. Each element MUST increase numerically. For instance: 1.9.0 -> 1.10.0 -> 1.11.0.  In the Semantic Versioning standard, major, minor and patch must all be present but since the exercise example shows missing components, that is allowed.

##Data Params
 None 
## Success Response:
Code: 200  Content: “before”, “after” or “equal”

##cError Response:
Code: 400 BAD REQUEST  Content: error message string
 
