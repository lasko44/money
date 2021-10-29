<template>
    <div class="small-container m-top-2 m-bottom-2 bg-rich-green-dark py-1 rounded-3">
            <div class="row m-top-5">
                <div class="d-flex justify-content-center">
                    <h4 class="abril extra-pale-spring">Money Made</h4>
                </div>
            </div>
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="h-line-extra-thin bg-extra-pale-spring"></div>
                </div>
            </div>
            <div class="row m-top-3 m-bottom-3">
                <div class="d-flex justify-content-center">
                    <h3 class="abril display-6 extra-pale-spring">$1,000</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-center">
                        <div class="h-line-extra-thin bg-rich-green-dark"></div>
                    </div>
                </div>
            </div>
            <div class="row m-top-2">
                <div class="d-flex justify-content-center">
                    <p class="small roboto extra-pale-spring">As of: </p>
                </div>
            </div>
            <div class="row">
                <div class="d-flex justify-content-center">
                    <p class="small roboto extra-pale-spring">{{date}}</p>
                </div>
            </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            date:''
        }
    },
  mounted() {
      let n =  new Date();
      let y = n.getFullYear();
      let m = n.getMonth() + 1;
      let d = n.getDate();
      this.date = m + "/" + d + "/" + y;
  }
}
</script>
