import { NgFormSelectorWarning } from '@angular/forms';

export class Quote {
    tags: string;
    _id: string;
    sr: string;
    en: string;
    author: string;
    rating: number;
    id: string;

    constructor(tags: string, _id: string, sr: string, en: string, author: string, rating: number, id: string){
        this.tags = tags;
        this._id = _id;
        this.sr = sr;
        this.en = en;
        this.author = author;
        this.rating = rating;
        this.id = id;
    }
}
