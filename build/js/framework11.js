function loadPage(func, url) {
  if (!func && func !== 0) {
    throw "Function Required: 0 loads page, 1 dismisses page."
  }
  if (!url && func !== 1) {
    throw "URL Required"
  }
  if (func == 0) {
  if (url !== document.getElementById("loader").src) {
    	document.getElementById("loader").src = url;
    }
    document.getElementById("page").className = "page-open"
  } else if (func == 1) {
    document.getElementById("page").className = "page-closed"
  } else {
    throw "Invalid Function"
  }
}
