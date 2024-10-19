<template v-if="siteinfo.header_logo_primary">
  <div>
    <template v-for="imgObj in [siteinfo.header_logo_primary]">
      <img :src="imgObj.url" width="200" class="card-profile__image img-fluid" />
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
