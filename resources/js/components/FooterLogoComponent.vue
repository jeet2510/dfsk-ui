<template v-if="siteinfo.footer_logo">
  <div>
    <template v-for="imgObj in [siteinfo.footer_logo]">
      <img :src="imgObj.url" width="150" class="card-profile__image img-fluid" />
    </template>
  </div>
</template>
<script>
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
