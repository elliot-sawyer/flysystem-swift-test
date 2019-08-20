# flysystem-swift-test
## EXPERIMENTAL - not working yet
Experimental support to connect to an OpenStack Swift container using SilverStripe's implementation of Flysystem
This module was written with Catalyst Cloud in mind, but should be applicable to any OpenStack instance.

# setup
Define the following constants in your .env
```.env
#Specific to Catalyst Cloud, your API endpoints are documented here: https://docs.catalystcloud.nz/sdks-and-toolkits/apis.html, see ProjectID notes below
#NOTE: might also be https://api.nz-por-1.catalystcloud.io:5000/v3
OPENSTACK_AUTH_URL="https://object-storage.nz-por-1.catalystcloud.io:443/v1/AUTH_%projectid%"

#prominently displayed on the dashboard of Catalyst Cloud (select your region)
#should correspond with auth URL above
OPENSTACK_REGION="nz-por-1"

#the actual UUID without hyphens of the user. This can be obtained from the OpenStack CLI tool.
# in catalyst cloud, it is exposed by visiting https://dashboard.cloud.catalyst.net.nz/management/project_users/
# You can obtain the UUID by inspecting the source of the Update User: the link contains the user ID
# Example: /management/project_users/dadxxxxxxxxxxxxxxxxxxxxxxxxx987/update/
OPENSTACK_USER_ID="dad..........................987"

#self explanatory. It would be great if this was a disposable token but for now it's not
OPENSTACK_USER_PASSWORD="this is your actual account password, ewww"

#  Project ID: https://dashboard.cloud.catalyst.net.nz/identity/
OPENSTACK_PROJECT_ID="eee..........................aaa"

# name of your container, as defined on the dashboard
# not sure if public / non-public makes a difference
OPENSTACK_PROJECT_BUCKET_NAME="example-container"
```
