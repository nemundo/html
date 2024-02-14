export default class WebConfig {

    static webUrl = '/';


    static loadCurrentWeb() {

        WebConfig.webUrl = (new URL(import.meta.url)).origin;

    }

}