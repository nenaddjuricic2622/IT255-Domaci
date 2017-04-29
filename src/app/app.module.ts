import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { HttpModule } from '@angular/http';
import { RouterModule, Routes } from '@angular/router';

import { AppComponent } from './app.component';
import { HeaderComponent } from './header.component';
import { JumboComponent } from './jumbo/jumbo.component';
import { FormaComponent } from './forma/forma.component';
import { CarouselComponent } from './carousel/carousel.component';
import { PaginationComponent } from './pagination/pagination.component';
import { TabelaComponent } from './tabela/tabela.component';
import { HomeComponent } from './home/home.component';
import { NavComponent } from './nav/nav.component';
import { LoginComponent } from './login/login.component';
import { SignupComponent } from './signup/signup.component';

const appRoutes: Routes = [
  { path: 'home', component: HomeComponent },
  { path: 'forma',      component: FormaComponent },
  { path: 'carousel',      component: CarouselComponent },
  { path: 'tabela',      component: TabelaComponent },
  { path: 'signup',      component: SignupComponent },
  { path: 'login',      component: LoginComponent },
  { path: '', redirectTo: '/home',pathMatch: 'full'}
];

@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    JumboComponent,
    FormaComponent,
    CarouselComponent,
    PaginationComponent,
    TabelaComponent,
    HomeComponent,
    NavComponent,
    LoginComponent,
    SignupComponent
  ],
  imports: [
    RouterModule.forRoot(appRoutes),
    BrowserModule,
    FormsModule,
    HttpModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
