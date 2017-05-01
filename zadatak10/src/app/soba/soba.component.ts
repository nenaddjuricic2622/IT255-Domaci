import { Component, Directive } from '@angular/core';
import { Http, Response } from '@angular/http';
import { Observable } from 'rxjs/Observable';
import 'rxjs/Rx';
import { Pipe, PipeTransform } from '@angular/core';

import { SearchsobaPipe } from '../searchsoba.pipe';

@Component({
  selector: 'mh-soba',
  templateUrl: './soba.component.html'
})

export class SobaComponent {

  data: Object[];

  brojKreveta: String = "";
  kvadrata: String = "";

  constructor(private http: Http) {
    this.http.get("http://127.0.0.1/service/soba.php").subscribe(
        data => {
              this.data = JSON.parse(data["_body"]);

        },
        err => console.log(err.text()),
        () => {

        }
     );
}
}
