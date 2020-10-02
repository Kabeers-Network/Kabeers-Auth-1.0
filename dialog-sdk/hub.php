<script src="https://cdn.jsdelivr.net/gh/zendesk/cross-storage/dist/hub.min.js"></script>
<body>
<script>
// Config s.t. subdomains can get, but only the root domain can set and del
CrossStorageHub.init([
  {origin: /:\/\/(www\.)?example.com$/, allow: ['get', 'set', 'del']},
  {origin: /:\/\/(docs-kabeersnetwork-kview-app-sta\.)?rf.gd$/, allow: ['get']}
]);
</script>
</body>
<?php
function getHost($url) {
    $parseUrl = parse_url(trim($url));
    if(isset($parseUrl['host']))
    {
        $host = $parseUrl['host'];
    }
    else
    {
        $path = explode('/', $parseUrl['path']);
        $host = $path[0];
    }
    return trim($host);
}

echo getHost("s.subdomain.example.net/anything");             // subdomain.example.net
