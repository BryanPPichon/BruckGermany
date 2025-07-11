
async function initMap() {
  // Request needed libraries.
  const { Map } = await google.maps.importLibrary("maps");
  const { AdvancedMarkerElement, PinElement } = await google.maps.importLibrary(
    "marker",
  );
  const { Place } = await google.maps.importLibrary("places");
  const {ColorScheme} = await google.maps.importLibrary("core")
  const map = new Map(document.getElementById("map"), {
    center: { lat: 19.156862846537084, lng: -98.38440169386601 },
    mapId: "1e5c3145d75c71333d00dc52",
    zoom: 14,
    colorScheme: ColorScheme.DARK,
  });
  const parser = new DOMParser();
  // A marker with a with a URL pointing to a PNG.
  const beachFlagImg = document.createElement("img");

  beachFlagImg.src ="http://vmasideas.agency/globo2_40.png";

  const beachFlagMarkerView = new AdvancedMarkerElement({
    map,
    position: { lat: 19.156862846537084, lng: -98.38440169386601 },
    content: beachFlagImg,
    scale: 0.002,
    title: "Brück Germany",
  });
}

initMap();
