[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Poly/functions?utm_source=RapidAPIGitHub_Poly&utm_medium=button&utm_content=RapidAPI_GitHub)

# Poly Package
Discover, view, and download thousands of free 3D assets directly in your AR and VR apps.
* Domain: [poly.google.com](https://poly.google.com/)
* Credentials: clientId, clientSecret

## How to get credentials: 
1. When you create your application, you register it using the [Google API Console](https://console.developers.google.com). Google then provides information you'll need later, such as a client ID and a client secret.
2. Activate the GoogleBook API in the Google API Console. (If the API isn't listed in the API Console, then skip this step.)
3. When your application needs access to user data, it asks Google for a particular scope of access.
4. Google displays a consent screen to the user, asking them to authorize your application to request some of their data.
5. If the user approves, then Google gives your application a short-lived access token.
 

 ## Custom datatypes: 
  |Datatype|Description|Example
  |--------|-----------|----------
  |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
  |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
  |List|Simple array|```["123", "sample"]``` 
  |Select|String with predefined values|```sample```
  |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ``` 
 
## Poly.getAccessToken
Get AccessToken.

| Field       | Type       | Description
|-------------|------------|----------
| clientId    | credentials| Client ID.
| clientSecret| credentials| Client secret.
| code        | String     | Code you received from Google after the user granted access
| redirectUri | String     | The same redirect URL as in received Code step.

## Poly.refreshToken
Get new accessToken by refreshToken.

| Field       | Type       | Description
|-------------|------------|----------
| clientId    | credentials| Client ID.
| clientSecret| credentials| Client secret.
| refreshToken| String     | A token that you can use to obtain a new access token. Refresh tokens are valid until the user revokes access. Again, this field is only present in this response if you set the access_type parameter to offline in the initial request to Google's authorization server.

## Poly.revokeAccessToken
In some cases a user may wish to revoke access given to an application. A user can revoke access by visiting Account Settings. It is also possible for an application to programmatically revoke the access given to it. Programmatic revocation is important in instances where a user unsubscribes or removes an application. In other words, part of the removal process can include an API request to ensure the permissions granted to the application are removed.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| The token can be an access token or a refresh token. If the token is an access token and it has a corresponding refresh token, the refresh token will also be revoked.

## Poly.getAssetsList
Lists all public, remixable assets.

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| Access Token. Use getAccessToken to get it.
| keywords     | List  | One or more search terms to be matched against all text that Poly has indexed for assets, which includes displayName, description, and tags.
| curated      | Select| String to identify the originator of this request.
| category     | Select| Filter assets based on the specified category.
| maxComplexity| Select| Returns assets that are of the specified complexity or less. Defaults to COMPLEX. For example, a request for MEDIUM assets also includes SIMPLE assets.
| format       | Select| Return only assets with the matching format.
| pageSize     | Number| The maximum number of assets to be returned. This value must be between 1 and 100. Defaults to 20.
| orderBy      | Select| Specifies an ordering for assets. Defaults to BEST, which ranks assets based on a combination of popularity and other features.
| pageToken    | String| Specifies a continuation token from a previous search whose results were split into multiple pages. To get the next page, submit the same request specifying the value from nextPageToken.

## Poly.getSingleAsset
Returns detailed information about an asset given its name. PRIVATE assets are returned only if the currently authenticated user (via OAuth token) is the author of the asset.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access Token. Use getAccessToken to get it.
| name       | String| An asset's name in the form assets/{ASSET_ID}.

## Poly.getUserAssetsList
Lists assets authored by the given user. Only the value 'me', representing the currently-authenticated user, is supported. May include assets with an access level of PRIVATE or UNLISTED and assets which are All Rights Reserved for the currently-authenticated user.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access Token. Use getAccessToken to get it.
| name       | String| A valid user id. Currently, only the special value 'me', representing the currently-authenticated user is supported. To use 'me', you must pass an OAuth token with the request.
| visibility | Select| The visibility of the assets to be returned. Defaults to VISIBILITY_UNSPECIFIED which returns all assets.
| format     | Select| Return only assets with the matching format.
| pageSize   | Number| The maximum number of assets to be returned. This value must be between 1 and 100. Defaults to 20.
| orderBy    | Select| Specifies an ordering for assets. Defaults to BEST, which ranks assets based on a combination of popularity and other features.
| pageToken  | String| Specifies a continuation token from a previous search whose results were split into multiple pages. To get the next page, submit the same request specifying the value from nextPageToken.

## Poly.getUsersLikedAssetsList
Lists assets that the user has liked. Only the value 'me', representing the currently-authenticated user, is supported. May include assets with an access level of UNLISTED.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access Token. Use getAccessToken to get it.
| name       | String| A valid user id. Currently, only the special value 'me', representing the currently-authenticated user is supported. To use 'me', you must pass an OAuth token with the request.
| format     | Select| Return only assets with the matching format.
| pageSize   | Number| The maximum number of assets to be returned. This value must be between 1 and 100. Defaults to 20.
| orderBy    | Select| Specifies an ordering for assets. Defaults to BEST, which ranks assets based on a combination of popularity and other features.
| pageToken  | String| Specifies a continuation token from a previous search whose results were split into multiple pages. To get the next page, submit the same request specifying the value from nextPageToken.

