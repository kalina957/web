export class CalendarApi {

    meta: {code: number}
    response: {holidays: [{name: string, description: string, date: Date, type: string[]}]}


    constructor(meta: {code: number} , response: {holidays: [{name: string, description: string, date: Date, type: string[]}]}) {

        this.meta = meta;
        this.response = response;
    }
}
