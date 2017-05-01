import { RouterModule, Routes } from '@angular/router';
import { ModuleWithProviders } from '@angular/core';

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
import { KorisniciComponent } from './korisnici/korisnici.component';
import { SobaComponent } from './soba/soba.component';

const appRoutes: Routes = [
  { path: 'home', component: HomeComponent },
  { path: 'forma',      component: FormaComponent },
  { path: 'carousel',      component: CarouselComponent },
  { path: 'tabela',      component: TabelaComponent },
  { path: 'signup',      component: SignupComponent },
  { path: 'login',      component: LoginComponent },
  { path: 'kor',      component: KorisniciComponent },
  { path: 'soba',      component: SobaComponent },
  { path: '', redirectTo: '/home',pathMatch: 'full'}
];

export const routing: ModuleWithProviders = RouterModule.forRoot(appRoutes);
