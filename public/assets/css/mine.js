function getBaseURL() {
   var loc = window.location;
   var baseURL = loc.protocol + "//" + loc.hostname;
   if (typeof loc.port !== "undefined" && loc.port !== "")
      baseURL += ":" + loc.port;
   // strip leading /
   var pathname = loc.pathname;
   if (pathname.length > 0 && pathname.substr(0, 1) === "/")
      pathname = pathname.substr(1, pathname.length - 1);
   var pathParts = pathname.split("/");
   if (pathParts.length > 0) {
      for (var i = 0; i < pathParts.length; i++) {
         if (pathParts[i] !== "")
            baseURL += "/" + pathParts[i];
      }
   }
   return baseURL;
}

