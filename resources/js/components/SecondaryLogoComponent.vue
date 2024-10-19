
<template v-if="siteinfo.header_logo_secondary">
  <div>
    <template v-for="imgObj in [siteinfo.header_logo_secondary]">
      <img :src="imgObj.url" class="card-profile__image img-fluid" />
    </template>
  </div>
</template>
<script>
import axios from 'axios';
export default {
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
