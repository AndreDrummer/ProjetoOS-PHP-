const axios = require("axios");

function unmaskElements() {
    masks.forEach((mask) => {
        $("." + mask.description).unmask();
    });
}

function maskElements() {
    let options = {
        method: "get",
        url: "https://localhost:4514/api/v1/mask",
      }

    axios(options)
      .then((response) => {
            masks = response.data.data;

            unmaskElements();

            masks.forEach((mask) => {
                $("." + mask.description).mask(mask.mask);
            });
      })
      .catch((error) => {
        console.error(error);
    });
}

gloaba.maskElements = maskElements;