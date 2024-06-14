import moment from "moment";

export function formatData(value){
    if(value){
        return moment(String(value)).format('YYYY-MM-DD');
    }
}