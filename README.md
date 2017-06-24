# Twitch Api Bundle

## Configuration

#### parameters.yml

Add parameters to final and dist yml

**parameters.yml.dist** 

```yaml
parameters:
    twitch_api_client_id:     ~
    twitch_api_client_secret: ~
```

**parameters.yml** 

```yaml
parameters:
    twitch_api_client_id:     YOUR_TWITCH_CLIENT_ID
    twitch_api_client_secret: YOUR_TWITCH_CLIENT_SECRET
```

#### config.yml

Link you parameters with the config file; 
Bundle will use client id and secret for api calls. 

```yaml
twitch_api:
    client:
        id:     '%twitch_api_client_id%'
        secret: '%twitch_api_client_secret%'
```

#### routing.yml (optional)

This is optional.
Will expose api calls, and documentations.

```yaml
twitch_api_bundle:
    resource: '@TwitchApiBundle/Resources/config/routing.yml'
```

