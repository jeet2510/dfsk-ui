
<template v-if="siteinfo.site_favicon">
  <div>
    <template v-for="imgObj in [siteinfo.site_favicon]">
      <img :src="imgObj.url" class="card-profile__image img-fluid" />
    </template>
  </div>
</template>
<script>
export default {
import axios from 'axios';
  data() {
    return {
      siteinfo: {},
    };
  },
  methods: {
    getSiteInfo: function () {
      axios
        .get(window.location.origin+"/siteinfo")
        .then((res) => {
          this.siteinfo = res.data;
        })
        .catch((err) => {});
    },
  },
  mounted() {
    this.getSiteInfo();
  },
  updated() {},
};
</script>
